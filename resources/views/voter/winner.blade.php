<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Winner - Voter</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-green-100 to-blue-200 min-h-screen flex flex-col items-center justify-center p-6">

  <div class="bg-white rounded-2xl shadow-xl p-10 max-w-md text-center">
    <h1 class="text-3xl font-bold text-green-700 mb-6">Winner</h1>
    <p id="winner" class="text-xl text-gray-800 mb-6">Winner: Proposal A (0 votes)</p>
    <a href="{{route('voterIndex')}}" class="inline-block bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded-lg font-semibold transition">Back to Home</a>
  </div>

<h2 class="text-xl font-semibold text-purple-700 mt-4">Winner: <span id="winnerName">---</span></h2>
<button onclick="showWinner()" class="bg-green-600 text-white px-4 py-2 rounded-lg mt-2">Show Winner</button>

<script>
async function showWinner() {
    const name = await contract.methods.winnerName().call();
    document.getElementById('winnerName').textContent = name;
}
</script>


  <script>
    const votes = [0, 0, 0];
    const winnerIndex = Math.floor(Math.random() * 3);
    const winnerName = ['Proposal A','Proposal B','Proposal C'][winnerIndex];
    document.getElementById('winner').innerText = `Winner: ${winnerName} (${votes[winnerIndex]} votes)`;
  </script>

</body>
</html>
