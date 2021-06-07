from flask import Flask, render_template, request
import pickle
import numpy as np

app = Flask(__name__)

model=pickle.load(open('data.pkl','rb'))

@app.route('/')
def hello_world():
	return render_template('Rate.html')

@app.route('/predict', methods=['POST'])
def predict():
	data1=request.form.get('slct1')
	data2=request.form.get('slct2')
	final=np.array([[data1,data2]])
	prediction=model.predict(final)
	print(prediction)
	return render_template('Rate.html',pred='your skill level is {}'.format(prediction))


if __name__=="__main__":
	app.run(debug=True)