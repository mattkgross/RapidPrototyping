from flask import Flask
from flask import request
from flask import render_template

import datetime
from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker
from setup import Tubes

app = Flask(__name__)

@app.route('/search', methods = ["GET"])
def search():
	diameter = request.args.get('diameter')
	usage = request.args.get('usage')

	if diameter != None:
		diameter = int(diameter)

	engine = create_engine('sqlite:///tubes.db', echo=True)
 
	# Create a Session
	Session = sessionmaker(bind=engine)
	session = Session()

	res = session.query(Tubes).all()

	if diameter != None and usage != None:
		res = session.query(Tubes).filter(Tubes.diameter <= diameter).filter(Tubes.diameter >= diameter-5).filter(Tubes.usage == usage)

	if diameter == None and usage != None:
		res = session.query(Tubes).filter(Tubes.usage == usage)

	if diameter != None and usage == None:
		res = session.query(Tubes).filter(Tubes.diameter <= diameter).filter(Tubes.diameter >= diameter-5)


	return render_template('search.html', res=res)

@app.route('/view/<id>')
def view(id = None):
	if id == None:
		return render_template('search.html')

	else:
		engine = create_engine('sqlite:///tubes.db', echo=True)

		# Create a Session
		Session = sessionmaker(bind=engine)
		session = Session()

		res = session.query(Tubes).filter(Tubes.id == id).first()

		return render_template('view.html', res=res)

app.debug = True
app.run()