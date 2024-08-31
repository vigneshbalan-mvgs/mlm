function createTree(container, structure) {
  const ul = document.createElement("ul");

  structure.forEach((item) => {
    const li = document.createElement("li");
    li.textContent = item.name;

    if (item.children) {
      createTree(li, item.children);
    }

    ul.appendChild(li);
  });

  container.appendChild(ul);
}

const treeData = [
  {
    name: "Animals",
    children: [
      { name: "Birds" },
      {
        name: "Mammals",
        children: [{ name: "Elephant" }, { name: "Mouse" }],
      },
      { name: "Reptiles" },
    ],
  },
  {
    name: "Plants",
    children: [
      {
        name: "Flowers",
        children: [{ name: "Rose" }, { name: "Tulip" }],
      },
      { name: "Trees" },
    ],
  },
];

document.addEventListener("DOMContentLoaded", function () {
  const treeContainer = document.getElementById("tree-container");
  createTree(treeContainer, treeData);
});
