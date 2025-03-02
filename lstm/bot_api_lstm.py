import json
import numpy as np
import tensorflow as tf
from flask import Flask, request, jsonify
from tensorflow.keras.preprocessing.text import tokenizer_from_json
from tensorflow.keras.preprocessing.sequence import pad_sequences
import nltk

# Inisialisasi Flask app
app = Flask(__name__)

# Load model yang telah dilatih
model = tf.keras.models.load_model("chatbot_lstm_model.h5")

# Load tokenizer
with open("tokenizer.json", "r", encoding="utf-8") as tokenizer_file:
    tokenizer_data = json.load(tokenizer_file)
    tokenizer = tokenizer_from_json(tokenizer_data)

# Load label_map
with open("label_map.json", "r", encoding="utf-8") as label_map_file:
    label_map = json.load(label_map_file)

# Load responses
with open("responses.json", "r", encoding="utf-8") as responses_file:
    responses = json.load(responses_file)

# Konversi label_map menjadi dict terbalik
label_map_inv = {v: k for k, v in label_map.items()}

# Fungsi untuk memproses input teks
def predict_intent(text):
    tokens = nltk.word_tokenize(text.lower())
    seq = tokenizer.texts_to_sequences([" ".join(tokens)])
    padded_seq = pad_sequences(seq, maxlen=model.input_shape[1], padding='post')
    prediction = model.predict(padded_seq)
    predicted_label = np.argmax(prediction)
    tag = label_map_inv[predicted_label]
    return np.random.choice(responses[str(predicted_label)])

# Endpoint untuk chatbot
@app.route("/chatbot", methods=["POST"])
def chat():
    data = request.get_json()
    if "message" not in data:
        return jsonify({"error": "No message provided"}), 400
    
    user_message = data["message"]
    bot_response = predict_intent(user_message)
    
    return jsonify({"response": bot_response})

# Menjalankan Flask app
if __name__ == "__main__":
    app.run(debug=True)
