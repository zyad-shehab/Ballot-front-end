<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proposals - Voter</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-green-100 to-blue-200 min-h-screen flex flex-col items-center p-6">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 mt-10">
    <h1 class="text-3xl font-bold text-center text-green-700 mb-6">Proposals</h1>

    <ul class="divide-y divide-green-200">
      <li class="py-3 flex justify-between">
        <span class="font-medium text-green-900">0 — Proposal A</span>
        <span class="text-green-700 font-semibold" id="votes0">0 votes</span>
      </li>
      <li class="py-3 flex justify-between">
        <span class="font-medium text-green-900">1 — Proposal B</span>
        <span class="text-green-700 font-semibold" id="votes1">0 votes</span>
      </li>
      <li class="py-3 flex justify-between">
        <span class="font-medium text-green-900">2 — Proposal C</span>
        <span class="text-green-700 font-semibold" id="votes2">0 votes</span>
      </li>
    </ul>

    <a href="{{route('voterIndex')}}" class="mt-6 block text-center text-green-700 underline">Back to Home</a>
  </div>

</body>
</html>
