# Tailwind CSS Setup

This project uses the standalone Tailwind CSS executable to compile CSS. This approach was chosen to avoid a Node.js dependency and keep the project focused on PHP.

## Installation

If the `tailwindcss-windows-x64.exe` executable is not present in the root of the project, you can download it by running the following command:

```bash
curl -sLO https://github.com/tailwindlabs/tailwindcss/releases/latest/download/tailwindcss-windows-x64.exe
```

## How it Works

The `tailwindcss-windows-x64.exe` executable scans all `.php` files in the project for Tailwind CSS classes and generates a static `styles/style.css` file.

The configuration for this is in the `tailwind.config.js` file.

## Development

To automatically watch for changes in your PHP files and re-compile the CSS, run the following command in your terminal:

```bash
./tailwindcss-windows-x64.exe -i ./styles/tailwind.css -o ./styles/style.css --watch
```

This will keep running in the background and ensure your styles are always up-to-date.

## Git

The `tailwindcss-windows-x64.exe` file is ignored by Git via the `.gitignore` file.

```