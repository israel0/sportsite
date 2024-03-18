const toggleButton = document.getElementById("checkbox");
const menu = document.getElementById("mobile_menu");

function toggleMenu() {
  // alert("done")
  if (menu.classList.contains("flex")) {
  } else {
  }
  menu.classList.toggle("hidden");
}

toggleButton.addEventListener("click", toggleMenu);

let users = [
  {
    id: 1,
    username: "dmeighan0",
    full_name: "Deidre Meighan",
    phone: "735 150 2347",
    status: true,
  },
  {
    id: 2,
    username: "tlampett1",
    full_name: "Tamiko Lampett",
    phone: "883 170 7075",
    status: true,
  },
  {
    id: 3,
    username: "clille2",
    full_name: "Craggy Lille",
    phone: "349 803 5506",
    status: false,
  },
  {
    id: 4,
    username: "dkingshott3",
    full_name: "Deeanne Kingshott",
    phone: "291 636 2803",
    status: true,
  },
  {
    id: 5,
    username: "jpumfrey4",
    full_name: "Joela Pumfrey",
    phone: "835 600 8562",
    status: false,
  },
  {
    id: 6,
    username: "rcocklie5",
    full_name: "Remus Cocklie",
    phone: "474 811 1908",
    status: true,
  },
  {
    id: 7,
    username: "kcozzi6",
    full_name: "Kean Cozzi",
    phone: "792 512 6352",
    status: false,
  },
  {
    id: 8,
    username: "ecormode7",
    full_name: "Estel Cormode",
    phone: "644 859 3605",
    status: false,
  },
  {
    id: 9,
    username: "jgiffkins8",
    full_name: "Jacquenette Giffkins",
    phone: "340 452 9969",
    status: false,
  },
  {
    id: 10,
    username: "jtappin9",
    full_name: "Juieta Tappin",
    phone: "860 495 6451",
    status: false,
  },
];

async function loadUsers() {
  // const response = await fetch('https://jsonplaceholder.typicode.com/users')
  // users = await response.json()

  userToTableRow();
};

loadUsers();

function userToTableRow() {
  const tbody = document.querySelector("tbody");
  users.forEach((user) => {
    tbody.innerHTML += createRow(user);
  });
};

function createRow(user) {
  return `
      <tr class="bg-white border-b">
            <th
              scope="row"
              class="font-medium text-gray-900 whitespace-nowrap dark:text-white px-6 py-4"
            >
              ${user.id}
            </th>
            <td class="px-6 py-4 sticky left-0 bg-white">${user.full_name}</td>
            <td class="px-6 py-4">${user.username}</td>
            <td class="px-6 py-4">${user.phone}</td>
            <td class="px-6 py-4">
            ${
              user.status
                ? `<div class="flex items-center">
              <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online
          </div>`
                : ` <div class="flex items-center">
          <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Offline
      </div>`
            }
            </td>
            <td class="px-6 py-4">
              <button
                type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
              >
                View Details
              </button>
            </td>
          </tr>
  `;
}

AOS.init();
