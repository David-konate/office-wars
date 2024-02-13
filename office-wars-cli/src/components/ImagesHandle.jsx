// ImagesHandle.jsx
import React, { useEffect, useState } from "react";
import { CircularProgress, Grid, Box, Typography } from "@mui/material";
import axios from "axios";
import useMediaQuery from "@mui/material/useMediaQuery";
import { firstLetterUppercase } from "../utils";

const ImagesHandle = ({ route, customText }) => {
  const [isBusy, setIsBusy] = useState(true);
  const [images, setImages] = useState([]);
  const isSmallScreen = useMediaQuery("(max-width:600px)"); // Ajoutez le breakpoint souhaité

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`imagesHeadband`);
      setImages(res.data);
    } catch (error) {
      console.log(error);
    } finally {
      setIsBusy(false);
    }
  };

  return isBusy ? (
    <div>
      <CircularProgress />
    </div>
  ) : (
    <Box
      display={"flex"}
      justifyContent={"center"}
      alignItems={"center"}
      position={"relative"}
      sx={{
        height: {
          xs: 300,
          sm: 400,
          md: 300,
        },
      }}
    >
      <Box
        position={"absolute"}
        top={0}
        left={0}
        bottom={0}
        right={0}
        width={"100%"}
        height={"100%"}
        zIndex={-1}
      >
        <Grid position={"relative"} container width={"100%"}>
          {images.slice(0, 4).map((image, index) => (
            <Grid item key={index} xs={3}>
              <img
                style={{
                  height: "100%",
                  objectFit: "cover",
                  width: "100%",
                  filter: "blur(5px) brightness(1)",
                }}
                alt={`baniere ${index + 1}`}
                src={
                  "https://i.pinimg.com/736x/58/4d/ba/584dba31c8540b91611da7e2fb766ec8.jpg"
                }
              />
            </Grid>
          ))}
          {isSmallScreen ? null : (
            <Typography
              position={"absolute"}
              top={"35%"}
              width={"100%"}
              textAlign={"center"}
              variant="h2"
            >
              {firstLetterUppercase(customText)}
            </Typography>
          )}
        </Grid>
      </Box>
    </Box>
  );
};

export default ImagesHandle;