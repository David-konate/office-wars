import React from "react";
import { useEffect } from "react";

const Home = () => {
  const [isBusy, setIsBusy] = React.useState(true);

  useEffect(() => {
    setIsBusy(false);
  }, []);

  return isBusy ? (
    <div>Loading...</div>
  ) : (
    <>
      <div>Loading...</div>
    </>
  );
};

export default Home;
