<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vote - Voter</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-green-100 to-blue-200 min-h-screen flex flex-col items-center p-6">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 mt-10">
    <h1 class="text-3xl font-bold text-center text-green-700 mb-6">Vote</h1>

    <input type="number" id="voteIndex" placeholder="Proposal index (0,1,2)"
      class="w-full p-3 border border-green-300 rounded mb-4 focus:outline-none focus:ring-2 focus:ring-green-400">
    <button onclick="vote()" 
      class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded font-semibold transition">Vote</button>

    <a href="{{route('voterIndex')}}" class="mt-6 block text-center text-green-700 underline">Back to Home</a>
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
