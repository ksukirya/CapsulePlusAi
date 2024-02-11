<?php
/**
 * Plugin Name: Vitamin Recommendations
 * Plugin URI:  https://yourwebsite.com/vitamin-recommendations
 * Description: Fetches and displays personalized vitamin recommendations from a Node.js backend.
 * Version:     1.0
 * Author:      Your Name
 * Author URI:  https://yourwebsite.com
 */

defined('ABSPATH') or die('Direct script access disallowed.');

function fetch_vitamin_recommendation_from_backend() {
    // Replace this URL with the actual URL of your Node.js application
    $request_url = 'http://localhost:3000/latest-vitamin-recommendation';

    $response = wp_remote_get($request_url, array(
        'timeout' => 15, // Increase timeout to ensure the external API has enough time to respond
    ));

    if (is_wp_error($response)) {
        $error_message = $response->get_error_message();
        return "Something went wrong: $error_message";
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if (!empty($data['summary'])) {
        return nl2br(esc_html($data['summary'])); // Convert newlines to <br> and escape HTML for security
    } else {
        return 'Currently, there are no new recommendations available.';
    }
}

function vitamin_recommendation_shortcode() {
    $content = fetch_vitamin_recommendation_from_backend();
    // Use a custom CSS class for styling the output
    return "<div class='vitamin-recommendations-wrapper'>{$content}</div>";
}

add_shortcode('vitamin_recommendation', 'vitamin_recommendation_shortcode');

function vitamin_recommendations_styles() {
    echo "
    <style>
    .vitamin-recommendations-wrapper {
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 20px 0;
    }
    </style>
    ";
}

add_action('wp_head', 'vitamin_recommendations_styles');
