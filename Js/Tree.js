const mlmTreeData = {
  name: "Root User",
  children: [
    {
      name: "User A",
      children: [
        {
          name: "User A1",
          children: [],
        },
        {
          name: "User A2",
          children: [],
        },
      ],
    },
    {
      name: "User B",
      children: [
        {
          name: "User B1",
          children: [],
        },
        {
          name: "User B2",
          children: [],
        },
      ],
    },
  ],
};

// Function to create tree structure dynamically with limit to 4 layers
function createTreeNode(node, parentElement, depth = 0) {
  if (depth >= 4) {
    const moreElement = document.createElement("div");
    moreElement.className = "tree-node more-node";
    moreElement.innerHTML = "...";
    parentElement.appendChild(moreElement);
    return;
  }

  const nodeElement = document.createElement("div");
  nodeElement.className = "tree-node";
  nodeElement.innerHTML = `<div class="node-content">${node.name}</div>`;
  parentElement.appendChild(nodeElement);

  if (node.children && node.children.length > 0) {
    const childrenContainer = document.createElement("div");
    childrenContainer.className = "children-container";
    node.children.forEach((child) =>
      createTreeNode(child, childrenContainer, depth + 1),
    );
    parentElement.appendChild(childrenContainer);
  }
}

// Initialize the tree
const treeContainer = document.getElementById("tree");
createTreeNode(mlmTreeData, treeContainer);
