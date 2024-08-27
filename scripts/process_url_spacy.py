import sys
import requests
import spacy
import json

def analyze_entities(text_content):
    nlp = spacy.load("en_core_web_sm")
    doc = nlp(text_content)
    entities = []
    for ent in doc.ents:
        entities.append({
            'name': ent.text,
            'label': ent.label_
        })
    return entities

def main(url):
    response = requests.get(url)
    content = response.text
    entities = analyze_entities(content)
    print(json.dumps({'entities': entities}))

if __name__ == "__main__":
    url = sys.argv[1]
    main(url)