// // public/js/blockchain.js
// let web3;
// let contract;


// // ✅ إعداد بيانات العقد
// const CONTRACT_ADDRESS = "0xd9145CCE52D386f254917e481eB44e9943F39138";
// const CONTRACT_ABI = [
//   {
//     "inputs": [{ "internalType": "address", "name": "to", "type": "address" }],
//     "name": "delegate",
//     "outputs": [],
//     "stateMutability": "nonpayable",
//     "type": "function"
//   },
//   {
//     "inputs": [{ "internalType": "address", "name": "voter", "type": "address" }],
//     "name": "giveRightToVote",
//     "outputs": [],
//     "stateMutability": "nonpayable",
//     "type": "function"
//   },
//   {
//     "inputs": [{ "internalType": "string[]", "name": "proposalNames", "type": "string[]" }],
//     "stateMutability": "nonpayable",
//     "type": "constructor"
//   },
//   {
//     "inputs": [{ "internalType": "uint256", "name": "proposal", "type": "uint256" }],
//     "name": "vote",
//     "outputs": [],
//     "stateMutability": "nonpayable",
//     "type": "function"
//   },
//   {
//     "inputs": [],
//     "name": "chairperson",
//     "outputs": [{ "internalType": "address", "name": "", "type": "address" }],
//     "stateMutability": "view",
//     "type": "function"
//   },
//   {
//     "inputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }],
//     "name": "proposals",
//     "outputs": [
//       { "internalType": "string", "name": "name", "type": "string" },
//       { "internalType": "uint256", "name": "voteCount", "type": "uint256" }
//     ],
//     "stateMutability": "view",
//     "type": "function"
//   },
//   {
//     "inputs": [{ "internalType": "address", "name": "", "type": "address" }],
//     "name": "voters",
//     "outputs": [
//       { "internalType": "uint256", "name": "weight", "type": "uint256" },
//       { "internalType": "bool", "name": "voted", "type": "bool" },
//       { "internalType": "address", "name": "delegate", "type": "address" },
//       { "internalType": "uint256", "name": "vote", "type": "uint256" }
//     ],
//     "stateMutability": "view",
//     "type": "function"
//   },
//   {
//     "inputs": [],
//     "name": "winnerName",
//     "outputs": [{ "internalType": "string", "name": "winnerName_", "type": "string" }],
//     "stateMutability": "view",
//     "type": "function"
//   },
//   {
//     "inputs": [],
//     "name": "winningProposal",
//     "outputs": [{ "internalType": "uint256", "name": "winningProposal_", "type": "uint256" }],
//     "stateMutability": "view",
//     "type": "function"
//   }
// ];

// // ✅ تحميل Web3.js من MetaMask
// // let web3;
// // let contract;
// let userAccount;

// async function initBlockchain() {
//   if (window.ethereum) {
//     web3 = new Web3(window.ethereum);
//     await window.ethereum.request({ method: "eth_requestAccounts" });

//     const accounts = await web3.eth.getAccounts();
//     userAccount = accounts[0];
//     contract = new web3.eth.Contract(CONTRACT_ABI, CONTRACT_ADDRESS);

//     console.log("Connected wallet:", userAccount);
//   } else {
//     alert("Please install MetaMask to use this DApp!");
//   }
  
// }
// async function testConnection() {
//     if (!contract) return console.error("Contract not initialized");
//     const chair = await contract.methods.chairperson().call();
//     console.log("Chairperson:", chair);
// }


// // ✅ إعطاء حق التصويت
// async function giveRightToVote(address) {
//   await contract.methods.giveRightToVote(address).send({ from: userAccount });
//   alert("Voting right granted to: " + address);
// }

// // ✅ التصويت لمرشح
// async function vote(proposalIndex) {
//   await contract.methods.vote(proposalIndex).send({ from: userAccount });
//   alert("Vote submitted successfully!");
// }

// // ✅ عرض المقترحات
// async function getProposals() {
//   const proposals = [];
//   for (let i = 0; i < 3; i++) {
//     const p = await contract.methods.proposals(i).call();
//     proposals.push({ name: p.name, votes: p.voteCount });
//   }
//   console.log(proposals);
//   return proposals;
// }

// // ✅ عرض الفائز
// async function getWinner() {
//   const name = await contract.methods.winnerName().call();
//   alert("Winner is: " + name);
// }








let web3;
let contract;
let contractAddress = "0xd9145CCE52D386f254917e481eB44e9943F39138"; // سيتم تغييره تلقائي بعد النشر
let contractABI = [ [
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "to",
				"type": "address"
			}
		],
		"name": "delegate",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "voter",
				"type": "address"
			}
		],
		"name": "giveRightToVote",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "string[]",
				"name": "proposalNames",
				"type": "string[]"
			}
		],
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "proposal",
				"type": "uint256"
			}
		],
		"name": "vote",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "chairperson",
		"outputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "proposals",
		"outputs": [
			{
				"internalType": "string",
				"name": "name",
				"type": "string"
			},
			{
				"internalType": "uint256",
				"name": "voteCount",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"name": "voters",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "weight",
				"type": "uint256"
			},
			{
				"internalType": "bool",
				"name": "voted",
				"type": "bool"
			},
			{
				"internalType": "address",
				"name": "delegate",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "vote",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "winnerName",
		"outputs": [
			{
				"internalType": "string",
				"name": "winnerName_",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "winningProposal",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "winningProposal_",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	}
] ];

async function initContract() {
    // استخدم Web3 المتوفر في Remix VM
    if (typeof window.ethereum !== 'undefined') {
        web3 = new Web3(Web3.givenProvider);
    } else {
        web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
    }

    contract = new web3.eth.Contract(contractABI, contractAddress);
}

// استدعاء هذا عند تحميل الصفحة
window.addEventListener('load', async () => {
    await initContract();
});
// جلب جميع المرشحين
async function loadProposals() {
    if (!contract) return alert("Contract not initialized");

    let proposalsList = document.getElementById("proposalsList");
    proposalsList.innerHTML = "";

    let i = 0;
    while (true) {
        try {
            let proposal = await contract.methods.proposals(i).call();
            let li = document.createElement("li");
            li.textContent = `${i} — ${proposal.name} (${proposal.voteCount} votes)`;
            proposalsList.appendChild(li);
            i++;
        } catch {
            break; // انتهت القائمة
        }
    }
}

// التصويت لمرشح
async function vote(proposalIndex) {
    let accounts = await web3.eth.getAccounts();
    await contract.methods.vote(proposalIndex).send({ from: accounts[0] });
    alert("Voted successfully!");
}

// عرض الفائز
async function showWinner() {
    let winner = await contract.methods.winnerName().call();
    alert("Winner: " + winner);
}
