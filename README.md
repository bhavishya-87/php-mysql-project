# Goal Tracker Web Application

![Running GIF](https://camo.githubusercontent.com/1140a4f2ffe1d7d5432df78421909e56c97909423568e609983ec3d4fbcb0b22/68747470733a2f2f726561646d652d747970696e672d7376672e6865726f6b756170702e636f6d3f666f6e743d4f72626974726f6e2673697a653d343026636f6c6f723d253233373941353030266865696768743d3637266475726174696f6e3d333030302663656e7465723d74727565266c696e65733d254630253946253835254236254630253946253836253831254630253946253835254234254630253946253835254234254630253946253836253833254630253946253835254238254630253946253835254244254630253946253835254236254630253946253836253832)

This repository contains a simple web application that allows users to track their daily goals. Users can add new goals to a to-do list, mark goals as completed, and remove completed goals from the list.

## Features

- Add new goals with categories, descriptions, and due dates.
- Mark goals as completed.
- Remove completed goals from the list.
- Separate display of incomplete and completed goals.

## How to Use

1. Clone or download this repository to your local machine.

2. Ensure you have a web server and a database setup. You'll need to create a MySQL database and update the `connect.php` file with your database details.

3. Open `index.php` in a web browser to access the goal tracking interface.

4. To add a new goal, fill in the goal details and click the "Submit Goal" button.

5. In the interface, you'll see two sections: "Incomplete Goals" and "Complete Goals." Incomplete goals can be marked as completed using the "Complete" button. Completed goals can be removed using the "Delete" button.

## Requirements

- A web server (e.g., Apache, Nginx) with PHP support.
- A MySQL database.

## Important Notes

- This application is intended as a basic example and may not have full security measures implemented. It's recommended to implement proper security practices before deploying to production.
- Make sure to update the database connection settings in the `connect.php` file to match your own database setup.
- Be cautious when deploying web applications that interact with databases and user inputs.

![Running GIF](  https://raw.githubusercontent.com/trinib/trinib/82213791fa9ff58d3ca768ddd6de2489ec23ffca/images/footer.svg)
