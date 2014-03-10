from sqlalchemy import create_engine, ForeignKey
from sqlalchemy import Column, Date, Integer, String
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.orm import relationship, backref
 
engine = create_engine('sqlite:///pets.db', echo=True)
Base = declarative_base()
 
########################################################################
class Pets(Base):
    """"""
    __tablename__ = "pets"
 
    id = Column(Integer, primary_key=True)
    name = Column(String)
    weight = Column(Integer)
    gender = Column(String)
    pic_url = Column(String)
 
    #----------------------------------------------------------------------
    def __init__(self, name, weight, gender, pic_url):
        """"""
        self.name = name
        self.weight = weight
        self.gender = gender
        self.pic_url = pic_url
 
# create tables
Base.metadata.create_all(engine)