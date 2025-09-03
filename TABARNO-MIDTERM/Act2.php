<?php
// Activity 2: User Dashboard with Conditionals.

function showDashboard($username, $role, $isActive, $isPremium, $lastLoginDaysAgo, $notificationPreference) {
    echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . PHP_EOL;
    echo "👤 Dashboard for $username" . PHP_EOL;
    echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . PHP_EOL;

// This is the profile and Dynamic Messages.
    $welcomeMessage = ($role === "administrator") 
        ? "Welcome back, Admin $username!" 
        : "Welcome, $username!";

    $loginMessage = ($lastLoginDaysAgo <= 1) 
        ? "You logged in recently." 
        : "Its been $lastLoginDaysAgo days since your last login.";

    echo $welcomeMessage . PHP_EOL;
    echo $loginMessage . PHP_EOL . PHP_EOL;

//This is the Feature Access.
    if (!$isActive) {
        echo "Your account is inactive. Please contact support." . PHP_EOL;
    } elseif ($role === "administrator") {
        echo "Full access to all system features." . PHP_EOL;
    } elseif ($role === "moderator") {
        echo "Access to Forum Management and Reports." . PHP_EOL;
        if ($isPremium) {
            echo "Premium moderation tools unlocked!" . PHP_EOL;
        }
    } elseif ($role === "member") {
        echo "Access to Forum Posts and Profile Editor." . PHP_EOL;
        if ($isPremium) {
            echo "Premium content library unlocked!" . PHP_EOL;
        }
    } else {
        echo "Limited access. Please register for more features." . PHP_EOL;
    }

    echo PHP_EOL;

//The Notification Preferences.
    switch ($notificationPreference) {
        case "email":
            echo "Email notifications are enabled." . PHP_EOL;
            break;
        case "sms":
            echo "SMS notifications are enabled." . PHP_EOL;
            break;
        case "both":
            echo "Both Email and SMS notifications are enabled." . PHP_EOL;
            break;
        case "none":
            echo "No notifications are enabled." . PHP_EOL;
            break;
        default:
            echo "Unknown notification preference." . PHP_EOL;
            break;
    }
}
    echo PHP_EOL . PHP_EOL;
// To test all the Features

// Case 1: Active Member with Premium
showDashboard("jane_doe", "member", true, true, 1, "email");

// Case 2: Inactive Moderator
showDashboard("mark_mod", "moderator", false, false, 5, "sms");

// Case 3: Admin Full Access
showDashboard("admin_boss", "administrator", true, false, 0, "both");

// Case 4: Guest User
showDashboard("guest123", "guest", true, false, 10, "none");

// Case 5: Premium Moderator
showDashboard("lucy_mod", "moderator", true, true, 2, "email");