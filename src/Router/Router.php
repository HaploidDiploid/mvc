<?php

declare(strict_types=1);

namespace johl20\Router;

use function johl20\Functions\{
    destroySession,
    redirectTo,
    renderView,
    renderTwigView,
    sendResponse,
    url
};

/**
 * Class Router.
 */
class Router
{
    public static function dispatch(string $method, string $path): void
    {
        if ($method === "GET" && $path === "/") {
            $data = [
                "header" => "Index page",
                "message" => "Hey, dude, I made it work. It ain't special, but it's here.",
            ];
            $body = renderView("layout/page.php", $data);
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/session") {
            $body = renderView("layout/session.php");
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/session/destroy") {
            destroySession();
            redirectTo(url("/session"));
            return;
        } else if ($method === "GET" && $path === "/debug") {
            $body = renderView("layout/debug.php");
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/dice") {
            $callable = new \johl20\Dice\Game();
            $callable->playGame();

            return;
        } else if ($method === "GET" && $path === "/newpage") {
        $data = [
            "header" => "Dice",
            "message" => "Dice are cool.",
        ];
        $body = renderView("layout/newpage.php", $data);
        sendResponse($body);
        
        return;
        } else if ($method === "GET" && $path === "/game21") {
        $data = [
            "header" => "Get 21",
            "message" => "Get closest to 21. If you get more than 21, you die.",
        ];
        $body = renderView("layout/game21.php", $data);
        sendResponse($body);
        
        return;
        } else if ($method === "POST" && $path === "/game21post") {
        $data = [
            "header" => "Ein- und- Zwanzig",
            "message" => "Würfel- Spiel. 21 is the magic number.",
        ];
        $body = renderView("layout/game21post.php", $data);
        sendResponse($body);
            
        return;
        } else if ($method === "POST" && $path === "/game21post2") {
        $data = [
            "header" => "Kaksikymmentä",
            "message" => "Noppa Peli. Get close to 21!",
        ];
        $body = renderView("layout/game21post2.php", $data);
        sendResponse($body);
                
        return;
        }
        $data = [
            "header" => "404",
            "message" => "The page you are requesting is not here. You may also checkout the HTTP response code, it should be 404.",
        ];
        $body = renderView("layout/page.php", $data);
        sendResponse($body, 404);
    }
}
