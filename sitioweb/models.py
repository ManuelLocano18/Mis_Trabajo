from sitioweb import db, login_manager
from flask_login import UserMixin

@login_manager.user_loader
def load_user(alumno_id):
    return Registroa.query.get(int(alumno_id))

class Registroa(db.Model, UserMixin):
    id = db.Column(db.Integer, primary_key=True)
    nombre = db.Column(db.String(20), unique=False, nullable=False)
    correo_institucional = db.Column(db.String(40), unique=True, nullable=False)
    password = db.Column(db.String(18), nullable=False)

    def __repr__(self):
        return f"User('{self.nombre}', '{self.correo_institucional}')"
