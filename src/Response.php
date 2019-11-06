<?php
declare(strict_types=1);

namespace SetBased\Abc\Response;

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
}

//----------------------------------------------------------------------------------------------------------------------
