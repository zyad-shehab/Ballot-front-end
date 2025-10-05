<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Winner</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-200 min-h-screen flex flex-col items-center justify-center p-6">

  <div class="bg-white rounded-2xl shadow-xl p-10 max-w-md text-center">
    <h1 class="text-3xl font-bold text-purple-700 mb-6">Winner</h1>
    <p id="winner" class="text-xl text-gray-800 mb-6">Winner: Proposal A (0 votes)</p>
    <a href="{{route("home")}}" class="inline-block bg-purple-600 hover:bg-purple-700 text-white py-3 px-6 rounded-lg font-semibold transition">Back to Home</a>
  </div>

  <script>
    // محاكاة اختيار الفائز بشكل عشوائي
    const votes = [0, 0, 0]; // يمكن تحديث هذه القيم عند التصويت في النسخة النهائية
    const winnerIndex = Math.floor(Math.random() * 3);
    const winnerName = ['Proposal A','Proposal B','Proposal C'][winnerIndex];
    document.getElementById('winner').innerText = `Winner: ${winnerName} (${votes[winnerIndex]} votes)`;
  </script>

</body>
</html>
