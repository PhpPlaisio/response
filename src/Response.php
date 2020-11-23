<?php
declare(strict_types=1);

namespace Plaisio\Response;

/**
 * Interface for an HTTP response.
 */
interface Response
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sends the response. That is, the headers and content.
   *
   * @return $this
   *
   * @api
   * @since 1.0.0
   */
  public function send(): Response;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the status code of the response.
   *
   * @return int
   *
   * @api
   * @since 2.0.0
   */
  public function getStatus(): int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the headers of the response. The keys of the array are the normalized header names and the values of the
   * array are the corresponding values of the headers.
   *
   * @return array
   *
   * @api
   * @since 2.0.0
   */
  public function getHeaders(): array;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
