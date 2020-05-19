from flask_wtf import FlaskForm
from wtforms import StringField, PasswordField, SubmitField, BooleanField
from wtforms.validators import DataRequired, Length, Email, EqualTo, ValidationError
from sitioweb.models import Registroa


class RegistrationForm(FlaskForm):
    nombre = StringField('Nombre completo',
                           validators=[DataRequired(), Length(max=50, message="Por favor introduce tu nombre completo", min=15)])
    correo_institucional = StringField('Correo Institucional',
                        validators=[DataRequired(), Email(message="Verifica tu correo")])
    password = PasswordField('Contraseña', validators=[DataRequired(message="Complete este campo"), Length(max=18, message="La contraseña debe ser minimo de 6 caracteres", min=6)])
    confirm_password = PasswordField('Confirmar Contraseña',
                                     validators=[DataRequired(message="Complete este campo"), EqualTo('password', message="Las contraseñas no coinciden"), Length(max=18, message="La contraseña debe ser minimo de 6 caracteres", min=6)])
    submit = SubmitField('Registrate')

    def  validate_correo_institucional(self, correo_institucional):
        alumno = Registroa.query.filter_by(correo_institucional=correo_institucional.data).first()
        if alumno:
            raise ValidationError('Este correo ya ha sido registrado')


class LoginForm(FlaskForm):
    correo_institucional = StringField('Correo Institucional',
                        validators=[DataRequired(), Email()])
    password = PasswordField('Contraseña', validators=[DataRequired()])
    submit = SubmitField('Iniciar Sesión')
