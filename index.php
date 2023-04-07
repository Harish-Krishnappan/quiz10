<!DOCTYPE html>
<html>
<head>
<title>Quiz 4/07</title>
<script>
  function sendMessage()
  {
    var message = document.getElementById("messageInput").value;
    var url = "counter.php?message=" + encodeURIComponent(message);
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.send();
  }

  function updateCounter()
  {
    var request = new XMLHttpRequest();
    var url = "counter.php";
    request.open("GET", url, true);
    request.onreadystatechange = function() {
      if (request.readyState == 4 && request.status == 200) {
        document.getElementById("counter").innerHTML = request.responseText;
      }
    };
    request.send();
  }

</script>
</head>
<body>

<form onsubmit="sendMessage(); return false;">
<label for="messageInput">Please Leave Your Message:</label>
<input type="text" name="messageInput" id="messageInput">
<button type="submit">Submit</button>
</form>

<p>Total Received Feedback Messages: <span id="counter"></span></p>

<script>
  updateCounter();
  setInterval(updateCounter, 5000);
</script>

</body>
</html>
