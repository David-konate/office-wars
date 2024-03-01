// ImagesHandle.jsx
import React, { useEffect, useState } from "react";
import { CircularProgress, Grid, Box, Typography } from "@mui/material";
import axios from "axios";
import useMediaQuery from "@mui/material/useMediaQuery";
import { displayImage, firstLetterUppercase } from "../utils";

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
      console.log(res.data);
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
                className="img-handle"
                style={{
                  width: "100%",
                  height: "100%",
                  objectFit: "cover",
                }}
                alt={`baniere ${index + 1}`}
                src={displayImage(image.imagePath)}
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
