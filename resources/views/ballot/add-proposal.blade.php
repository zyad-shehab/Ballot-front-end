<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Proposal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-200 min-h-screen flex flex-col items-center p-6">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 mt-10">
    <h1 class="text-3xl font-bold text-center text-purple-700 mb-6">Add Proposal</h1>

    <!-- فورم إضافة المرشح -->
    <form action="#" method="POST">
      @csrf
      <div class="mb-4">
        <label for="proposalName" class="block text-gray-700 font-semibold mb-2">Proposal Name</label>
        <input type="text" id="proposalName" name="name" required
               class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-400">
      </div>

      <button type="submit" 
              class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 rounded font-semibold transition">
        Add Proposal
      </button>
    </form>

    <a href="{{ route('proposals') }}" 
       class="mt-6 block text-center text-purple-700 underline">
       Back to Proposals
    </a>

  </div>

</body>
</html>
