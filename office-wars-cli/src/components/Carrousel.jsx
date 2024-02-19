import React from "react";
import Carousel from "react-material-ui-carousel";
import { Paper } from "@mui/material";

function ReusableCarousel({ items, renderFunction }) {
  return (
    <Carousel>
      {items.map((item, index) => (
        <CarouselItem key={index} item={item} renderFunction={renderFunction} />
      ))}
    </Carousel>
  );
}

function CarouselItem({ item, renderFunction }) {
  return <Paper>{renderFunction(item)}</Paper>;
}

export default ReusableCarousel;
