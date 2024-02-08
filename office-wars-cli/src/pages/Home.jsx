import React from "react";
import { useEffect } from "react";
import CircularProgress from "@mui/material/CircularProgress";
import { Box } from "@mui/material";
import { Container } from "@mui/system";

const Home = () => {
  const [isBusy, setIsBusy] = React.useState(true);

  useEffect(() => {
    setIsBusy(false);
  }, []);

  return isBusy ? (
    <Container>
      <Box sx={{ display: "flex" }}>
        <CircularProgress />
      </Box>
    </Container>
  ) : (
    <Container>
      <div>chargeé...</div>
    </Container>
  );
};

export default Home;
