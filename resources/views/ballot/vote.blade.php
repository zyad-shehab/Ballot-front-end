<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vote</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-200 min-h-screen flex flex-col items-center p-6">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 mt-10">
    <h1 class="text-3xl font-bold text-center text-purple-700 mb-6">Vote</h1>

    <input type="number" id="proposalIndex" placeholder="Proposal Index" class="border p-2 rounded">
    <button onclick="vote(document.getElementById('proposalIndex').value)" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Vote</button>

    <a href="{{route("home")}}" class="mt-6 block text-center text-purple-700 underline">Back to Home</a>
  </div>

  <script>
    const votes = [0, 0, 0];

    function vote() {
      const index = parseInt(document.getElementById('voteIndex').value);
      if(index >= 0 && index <= 2) {
        votes[index]++;
        alert(`Vote for proposal ${index} recorded!`);
        document.getElementById('voteIndex').value = '';
      } else {
        alert('Enter a valid proposal index (0,1,2).');
      }
    }
  </script>
</body>
</html>
