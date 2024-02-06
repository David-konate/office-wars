import Button from "@mui/material/Button";

const BlackButton = ({ children }) => {
  return (
    <Button
      sx={{
        backgroundColor: "var(--black-color)",
        color: "white",
        width: "fit-content",
        "&:hover": {
          background: "var(--black-light-color)",
        },
      }}
    >
      {children}
    </Button>
  );
};

export default BlackButton;
