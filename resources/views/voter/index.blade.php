<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ballot Voter</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-green-100 to-blue-200 min-h-screen flex flex-col items-center p-6">

  <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl p-8 mt-10 text-center">
    <p class="text-center text-xl text-gray-700 mb-4">Hello, user! Welcome back.</p>
    <h1 class="text-4xl font-bold text-green-700 mb-6">Ballot DApp - Voter</h1>

   <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="{{ route('voterProposals') }}" class="block bg-green-600 hover:bg-green-700 text-white py-6 rounded-lg font-semibold transition">
            Proposals
        </a>
        <a href="{{ route('voterVote') }}" class="block bg-green-600 hover:bg-green-700 text-white py-6 rounded-lg font-semibold transition">
            Vote
        </a>
        <a href="{{ route('voterWinner') }}" class="block bg-green-600 hover:bg-green-700 text-white py-6 rounded-lg font-semibold transition">
            Winner
        </a>
    </div>
  </div>

</body>
</html>
