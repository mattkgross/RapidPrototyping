from flask import Flask
from flask import request
from flask import render_template

import datetime
from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker
from setup import Pets

app = Flask(__name__)

@app.route('/search', methods = ["GET"])
def search():
	weight = request.args.get('weight')
	gender = request.args.get('gender')

	if weight != None:
		weight = int(weight)

	engine = create_engine('sqlite:///pets.db', echo=True)
 
	# Create a Session
	Session = sessionmaker(bind=engine)
	session = Session()

	res = session.query(Pets).all()

	if weight != None and gender != None:
		res = session.query(Pets).filter(Pets.weight <= weight).filter(Pets.weight >= weight-10).filter(Pets.gender == gender)

	if weight == None and gender != None:
		res = session.query(Pets).filter(Pets.gender == gender)

	if weight != None and gender == None:
		res = session.query(Pets).filter(Pets.weight <= weight).filter(Pets.weight >= weight-10)


	return render_template('search.html', res=res)

@app.route('/view/<name>')
def view(name = None):
	if name == None:
		return render_template('search.html')

	else:
		engine = create_engine('sqlite:///pets.db', echo=True)

		# Create a Session
		Session = sessionmaker(bind=engine)
		session = Session()

		res = session.query(Pets).filter(Pets.name == name).first()

		return render_template('view.html', res=res)

app.debug = True
app.run()