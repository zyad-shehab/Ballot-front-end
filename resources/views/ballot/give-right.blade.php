<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Give Right to Vote</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-200 min-h-screen flex flex-col items-center p-6">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 mt-10">
    <h1 class="text-3xl font-bold text-center text-purple-700 mb-6">Give Right to Vote</h1>

    <input type="text" id="voterAddress" placeholder="Enter voter address" class="border p-2 rounded">
    <button onclick="giveRightToVote(document.getElementById('voterAddress').value)" class="bg-purple-600 text-white px-4 py-2 rounded-lg">Give Right</button>

    <a href="{{route("home")}}" class="mt-6 block text-center text-purple-700 underline">Back to Home</a>
  </div>

  <script>
    function giveRight() {
      const voter = document.getElementById('voterAddress').value;
      if(voter) {
        alert(`Voter ${voter} is now allowed to vote (simulated).`);
        document.getElementById('voterAddress').value = '';
      } else {
        alert('Enter a valid voter address.');
      }
    }
  </script>
</body>
</html>
