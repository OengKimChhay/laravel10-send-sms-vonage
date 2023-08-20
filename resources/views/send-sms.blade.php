<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background-color: #eee;
  font-family: 'helvetica neue', helvetica, arial, sans-serif;
  color: #222;
}

#form {
  max-width: 700px;
  padding: 2rem;
  box-sizing: border-box;
}

.form-field {
  display: flex;
  margin: 0 0 1rem 0;
}
label, input {
  width: 70%;
  padding: 0.5rem;
  box-sizing: border-box;
  justify-content: space-between;
  font-size: 1.1rem;
}
label {
  text-align: right;
  width: 30%;
}
input {
  border: 2px solid #aaa;
  border-radius: 2px;
}

    </style>
</head>
<body>
    

    <form method="post" action="{{ route('send-sms')}}" id="form" class="validate">
        @csrf
        <div class="form-field">
          <label for="phone">Phone Number</label>
          <input type="text" name="phone" id="phone" placeholder="Ex: 8551234567" required />
        </div>
        <div class="form-field">
            <label for="message">Message</label>
            <input type="text" name="message" id="message" placeholder="" required />
          </div>
        <div class="form-field">
          <label for=""></label>
          <input type="submit" value="Send" />
        </div>
      </form>

</body>
</html>