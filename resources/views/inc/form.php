<!doctype html> <html> 
<body>
<?php

echo Form::open(array('url'=>'foo/bar'));
echo Form::text('username','Username');
echo'<br/>';
echo Form::text('email','example@gmail');
echo'<br/>';
echo Form::password('password');
echo'<br/>';
echo Form::checkbox('name','value');
echo'<br/>';
echo Form::radio('username','Username');
echo'<br/>';
echo Form::file('image');
echo'<br/>';
echo Form::submit('click me!');
echo Form::close();
?>
</body>
</html>





