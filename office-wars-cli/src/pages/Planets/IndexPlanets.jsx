import React, { useEffect, useState } from "react";
import { useNavigate } from "react-router";
import {
  CircularProgress,
  Box,
  Breadcrumbs,
  Link,
  Typography,
  Grid,
  Container,
} from "@mui/material";
import axios from "axios";
import ImagesHandle from "../../components/ImagesHandle";

const IndexPlanets = () => {
  const navigate = useNavigate();
  const [isBusy, setIsBusy] = useState(true);
  const [planets, setPlanets] = useState([]);

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`planets`);
      setPlanets(res.data);
    } catch (error) {
      console.log(error);
    } finally {
      setIsBusy(false);
    }
  };

  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Box>
      <ImagesHandle route="images" customText="DE LOINTAINE PLANETES" />
      <Box ml={5} mr={5}>
        <Breadcrumbs aria-label="breadcrumb">
          <Link underline="hover" color="inherit" href="/">
            {"Home"}
          </Link>
          <Link
            underline="hover"
            color="inherit"
            href="/planetes"
            style={{ color: "var(--primary-color)" }}
          >
            {"Planetes"}
          </Link>
        </Breadcrumbs>
        <Container>
          <Grid container spacing={2} mt={1}>
            {planets.map((planet, index) => (
              <Grid key={index} item mt={5} xs={6}>
                <Box
                  className="Planete"
                  display="flex"
                  flexDirection="column"
                  alignItems="center"
                  justifyContent="center"
                >
                  <Typography variant="h4">{planet.planetName}</Typography>
                  <Box mt={3} className="img-planetes-index">
                    <img
                      src={`https://upload.wikimedia.org/wikipedia/commons/e/ec/Coruscant.jpg`}
                      alt={planet.name}
                    />
                  </Box>
                  <Typography pl={5} pr={5} pt={4} textAlign={"center"}>
                    {planet.planetDescription}
                  </Typography>
                  <Box mt={1}>
                    <Link
                      className="custom-link"
                      component="button"
                      variant="body2"
                      onClick={() =>
                        navigate(`/planetes/${planet.slug}`, {
                          state: { planetId: planet.id },
                        })
                      }
                    >
                      {"EN SAVOIR PLUS"}
                    </Link>
                  </Box>
                </Box>
              </Grid>
            ))}
          </Grid>
        </Container>
      </Box>
    </Box>
  );
};

export default IndexPlanets;
