<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pixel Sense Park</title>
</head>

<body>
  <div style="padding: 40px 20px; border-radius: 10px; background: lightsteelblue; color: #222; text-align: center">
    @if ($info->type === 'quote')
    <h2>New Quote Arrived, Please Check Your Website</h2>
    @endif
    @if ($info->type === 'contact')
    <h2>"{{ htmlspecialchars($info->name) }}" Want To Contact With "PixeLSense Park" Team</h2>
    <h4>Email : {{ htmlspecialchars($info->email) }}</h4>
    @if (!is_null($info->message))
    <h4>Message : {{ htmlspecialchars($info->message) }}</h4>
    @endif
    <a href="mailto:{{ htmlspecialchars($info->email) }}" style="background-image: linear-gradient(to right, #667eea, #6db7f0); border: none; border-radius: 30px; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;">Let's Talk</a>
    @endif
  </div>
</body>

</html>