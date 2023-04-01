export default () => {
  const mapContainer = document.querySelector("#map");

  if (!mapContainer) return;
  import("./map_handle").then((module) => {
    const mapHandle = module.default;

    mapHandle();
  });
};
