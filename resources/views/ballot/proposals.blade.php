<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proposals</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-200 min-h-screen flex flex-col items-center p-6">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 mt-10">
    <h1 class="text-3xl font-bold text-center text-purple-700 mb-6">Proposals</h1>

    <!-- زر إضافة مرشح جديد (لـ Admin) -->
    <a href="{{ route('AddProposal') }}" 
       class="mb-4 inline-block bg-purple-600 hover:bg-purple-700 text-white py-2 px-4 rounded font-semibold transition">
       Add Proposal
    </a>

    <!-- عرض جميع المرشحين ديناميكيًا -->
    <ul class="divide-y divide-purple-200">
        <li class="py-3 flex justify-between">
          <span class="font-medium text-purple-900">zyad </span>
          <span class="text-purple-700 font-semibold">14 votes</span>
        </li>
        <li class="py-3 flex justify-between">
          <span class="font-medium text-purple-900">zyad </span>
          <span class="text-purple-700 font-semibold">14 votes</span>
        </li>
        <li class="py-3 flex justify-between">
          <span class="font-medium text-purple-900">zyad </span>
          <span class="text-purple-700 font-semibold">14 votes</span>
        </li>
      {{-- @foreach ($proposals as $index => $proposal)
        <li class="py-3 flex justify-between">
          <span class="font-medium text-purple-900">{{ $index }} — {{ $proposal->name }}</span>
          <span class="text-purple-700 font-semibold">{{ $proposal->voteCount }} votes</span>
        </li>
      @endforeach --}}
    </ul>

    <a href="{{ route('home') }}" class="mt-6 block text-center text-purple-700 underline">Back to Home</a>
  </div>

</body>
</html>
