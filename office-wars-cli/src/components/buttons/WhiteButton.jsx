import Button from "@mui/material/Button";

const WhiteButton = ({ children }) => {
  return (
    <Button
      sx={{
        backgroundColor: "white",
        color: "var(--black-color)",
        width: "fit-content",
        "&:hover": {
          color: "white",
          background: "var(--light-dark-color)",
        },
      }}
    >
      {children}
    </Button>
  );
};

export default WhiteButton;
