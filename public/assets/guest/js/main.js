window.addEventListener("load", () => {
  const groups = {};

  document.querySelectorAll("[data-box-group]").forEach((box) => {
    const group = box.getAttribute("data-box-group");
    if (!groups[group]) groups[group] = [];
    groups[group].push(box);
  });

  Object.values(groups).forEach((boxes) => {
    let maxHeight = 0;

    boxes.forEach((box) => {
      box.style.height = "auto";
      const height = box.offsetHeight;
      if (height > maxHeight) maxHeight = height;
    });

    boxes.forEach((box) => {
      box.style.height = maxHeight + "px";
    });
  });
});
