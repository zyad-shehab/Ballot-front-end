<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ballot DApp</title>
  <script src="https://cdn.jsdelivr.net/npm/web3@1.8.2/dist/web3.min.js"></script>
<script src="{{ asset('js/blockchain.js') }}"></script>

  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-200 min-h-screen flex flex-col items-center p-6">

  <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl p-8 mt-10">
    
    <!-- رسالة ترحيب -->
    <p class="text-center text-xl text-gray-700 mb-4">Hello, Admin! Welcome back.</p>

    <h1 class="text-4xl font-bold text-center text-purple-700 mb-6">Ballot DApp</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <a href="{{route('giveRight')}}" class="block bg-purple-600 hover:bg-purple-700 text-white text-center py-6 rounded-lg font-semibold transition">Give Right to Vote</a>
      <a href="{{route('vote')}}" class="block bg-purple-600 hover:bg-purple-700 text-white text-center py-6 rounded-lg font-semibold transition">Vote</a>
      <a href="{{route('proposals')}}" class="block bg-purple-600 hover:bg-purple-700 text-white text-center py-6 rounded-lg font-semibold transition">Proposals</a>
      <a href="{{route('winner')}}" class="block bg-purple-600 hover:bg-purple-700 text-white text-center py-6 rounded-lg font-semibold transition">Show Winner</a>
    </div>
  </div>

  <button onclick="testConnection()" class="bg-blue-600 text-white px-4 py-2 rounded-lg mt-2">Test Connection</button>


</body>
</html>
<script>
document.addEventListener("DOMContentLoaded", () => {
    initBlockchain();
});
</script>
