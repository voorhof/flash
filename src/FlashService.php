<?php

namespace Voorhof\Flash;

class FlashService
{
    /**
     * Flash a primary message to the session.
     *
     * @param  string  $message  The message to flash
     */
    public function primary(string $message): void
    {
        $this->flash($message, 'primary');
    }

    /**
     * Flash a secondary message to the session.
     *
     * @param  string  $message  The message to flash
     */
    public function secondary(string $message): void
    {
        $this->flash($message, 'secondary');
    }

    /**
     * Flash a success message to the session.
     *
     * @param  string  $message  The message to flash
     */
    public function success(string $message): void
    {
        $this->flash($message, 'success');
    }

    /**
     * Flash a warning message to the session.
     *
     * @param  string  $message  The message to flash
     */
    public function warning(string $message): void
    {
        $this->flash($message, 'warning');
    }

    /**
     * Flash a danger/error message to the session.
     *
     * @param  string  $message  The message to flash
     */
    public function danger(string $message): void
    {
        $this->flash($message, 'danger');
    }

    /**
     * Flash an info message to the session.
     *
     * @param  string  $message  The message to flash
     */
    public function info(string $message): void
    {
        $this->flash($message);
    }

    /**
     * Flash a light message to the session.
     *
     * @param  string  $message  The message to flash
     */
    public function light(string $message): void
    {
        $this->flash($message, 'light');
    }

    /**
     * Flash a dark message to the session.
     *
     * @param  string  $message  The message to flash
     */
    public function dark(string $message): void
    {
        $this->flash($message, 'dark');
    }

    /**
     * Flash a message to the session with the specified level.
     *
     * @param  string  $message  The message to flash
     * @param  string  $level  The level of the message (success, warning, danger, info, ...)
     */
    public function flash(string $message, string $level = 'info'): void
    {
        session()->flash('flash_message', $message);
        session()->flash('flash_level', $level);
    }
}
