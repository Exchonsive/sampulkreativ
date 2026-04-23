from flask import Flask, request, jsonify
import tensorflow as tf
import pickle
import json
import numpy as np
import string
from nltk.tokenize import word_tokenize

app = Flask(__name__)

model = tf.keras.models.load_model("chatbot_model.h5")
with open("tokenizer.pkl", "rb") as f:
    tokenizer = pickle.load(f)
with open("label_encoder.pkl", "rb") as f:
    le = pickle.load(f)
with open("intents-fix.json", encoding='utf-8') as file:
    data = json.load(file)
with open("combined_slang_words.txt", encoding='utf-8') as f:
    slang_dict = json.load(f)

max_len = model.input_shape[1]

def normalize_slang(tokens):
    return [slang_dict.get(w, w) for w in tokens]

def preprocess_input(text):
    text = text.lower().translate(str.maketrans('', '', string.punctuation))
    tokens = word_tokenize(text)
    normalized = normalize_slang(tokens)
    final_text = ' '.join(normalized)
    seq = tokenizer.texts_to_sequences([final_text])
    padded = tf.keras.preprocessing.sequence.pad_sequences(seq, maxlen=max_len, padding='post')
    return padded

def get_response(predicted_tag):
    for intent in data['intents']:
        if intent['tag'] == predicted_tag:
            return np.random.choice(intent['responses'])
    return "Maaf kak, aku belum ngerti maksudnya 😅"

@app.route("/chat", methods=["POST"])
def chat():
    user_input = request.json.get("message")
    if not user_input:
        return jsonify({"error": "Pesan kosong"}), 400

    input_seq = preprocess_input(user_input)
    prediction = model.predict(input_seq)[0]
    tag = le.inverse_transform([np.argmax(prediction)])[0]
    response = get_response(tag)

    return jsonify({
        "tag": tag,
        "response": response
    })

if __name__ == "__main__":
    app.run(debug=True, host="0.0.0.0", port=5000)
