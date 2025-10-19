<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposals - Ballot DApp</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/web3@1.8.2/dist/web3.min.js"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-200 min-h-screen flex flex-col items-center p-6">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 mt-10">
        <h1 class="text-3xl font-bold text-center text-purple-700 mb-6">Proposals</h1>

        <ul id="proposalsList" class="divide-y divide-purple-200 mb-6"></ul>

        <button onclick="loadProposals()" class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 rounded-lg font-semibold transition mb-4">
            Load Proposals
        </button>

        <a href="{{ route('home') }}" class="block text-center text-purple-700 underline">Back to Home</a>
    </div>

    <script>
        let web3;
        let contract;
        const contractAddress = ""; // ضع هنا عنوان العقد بعد النشر
        const contractABI = [
        ];

        async function initContract() {
            // استخدم Web3 في حال كان موجود من Remix VM أو غيره
            if (typeof window.ethereum !== 'undefined') {
                web3 = new Web3(Web3.givenProvider);
                await window.ethereum.enable();
            } else {
                web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
            }

            contract = new web3.eth.Contract(contractABI, contractAddress);
        }

        async function loadProposals() {
            if (!contract) return alert("Contract not initialized. Refresh the page!");

            const proposalsList = document.getElementById("proposalsList");
            proposalsList.innerHTML = "";

            let i = 0;
            while (true) {
                try {
                    const proposal = await contract.methods.proposals(i).call();
                    const li = document.createElement("li");
                    li.className = "py-3 flex justify-between";
                    li.innerHTML = `<span class="font-medium text-purple-900">${i} — ${proposal.name}</span>
                                    <span class="text-purple-700 font-semibold">${proposal.voteCount} votes</span>`;
                    proposalsList.appendChild(li);
                    i++;
                } catch {
                    break; // انتهت القائمة
                }
            }
        }

        window.addEventListener('load', async () => {
            await initContract();
        });
    </script>

</body>
</html>
