from flask import Flask, request
import openai
import json
# example for davinci-4
app = Flask(__name__)
# example for davinci-4

@app.route('/', methods=['POST'])
def home():
    prompt = request.form['prompt']
    openai.api_key = 'YOUR_OPENAI_KEY'
    response = openai.Completion.create(engine="text-davinci-004", prompt=prompt, max_tokens=100)
    with open('output.txt', 'w') as f:
        f.write(json.dumps(response['choices'][0]['text'], indent=4))
    return 'Done'

if __name__ == '__main__':
    app.run(port=5000)
