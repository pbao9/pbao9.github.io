/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: "jit",
  purge: ["./public/**/*.html", "./src/**/*.{js,jsx,ts,tsx,vue}"],
  content: [
    // Example content paths...
    "../**/*.html",
    "../../**/*.{js,jsx,ts,tsx,vue}",
  ],
  separator: "_",
  theme: {
    extend: {},
  },
  plugins: [],
};
