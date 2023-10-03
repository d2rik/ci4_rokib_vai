<?php
function nl2li($text)
{
    $paragraphs = preg_split("/\n\s*\n/", $text);
    $result = '<ul class=" list-disc ms-5">';
    foreach ($paragraphs as $paragraph) {
        $paragraph = trim($paragraph);
        if (!empty($paragraph)) {
            $result .= '<li>' . $paragraph . '</li>';
        }
    }
    $result .= '</ul>';
    return $result;
}

function convertLinks($paragraph)
    {
        // Regular expression to find links inside double parentheses
        $pattern = '/\(\(([^,]+)##([^)]+)\)\)/';

        // Replace the matched pattern with anchor tags
        $replacement = '<a class="text-primary hover:underline" href="$2">$1</a>';

        // Use preg_replace to replace all occurrences
        $paragraph = preg_replace($pattern, $replacement, $paragraph);

        return $paragraph;
    }