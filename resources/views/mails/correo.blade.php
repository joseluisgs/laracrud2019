Hola <i>{{ $email->receptor }}</i>,
<p>Formulario de Contacto.</p>
<p><u>Te has puesto en contacto conmigo</u></p>

<p><u>Contenido:</u></p>

<p><b>Nombre del proyecto:</b>&nbsp;{{ $titulo }}</p>
<p><b>Curso:</b>&nbsp;{{ $texto }}</p>

<div>
<p><b>Nombre:</b>&nbsp;{{ $email->nombre }}</p>
<p><b>Comentario:</b>&nbsp;{{ $email->comentario }}</p>
<p><b>Tu correo:</b>&nbsp;{{ $email->correo }}</p>
</div>

Muchas gracias,
<br/>
<i>{{ $email->emisor }}</i>
