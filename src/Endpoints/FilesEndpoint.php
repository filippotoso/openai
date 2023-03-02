<?php

namespace FilippoToso\OpenAI\Endpoints;

use FilippoToso\Api\Sdk\Support\Response;

class FilesEndpoint extends Endpoint
{
    /**
     * List files
     * @see https://platform.openai.com/docs/api-reference/files
     * @return Response
     */
    public function list(): Response
    {
        return $this->get('/files');
    }

    /**
     * Create translation
     * @see https://platform.openai.com/docs/api-reference/audio/create
     * @return Response
     */
    public function upload(string $file, string $purpose,): Response
    {
        return $this->post('/files', [], $this->payload(__METHOD__, func_get_args()));
    }

    /**
     * Delete a file
     *
     * @see https://platform.openai.com/docs/api-reference/files/delete
     * @return Response
     */
    public function delete(string $file_id)
    {
        return $this->delete('/files/' . $file_id);
    }

    /**
     * Retrieve file
     *
     * @see https://platform.openai.com/docs/api-reference/files/retrieve
     * @return void
     */
    public function retrieve(string $file_id)
    {
        return $this->get('/files/' . $file_id);
    }

    /**
     * Retrieve file
     *
     * @see https://platform.openai.com/docs/api-reference/files/retrieve
     * @return void
     */
    public function content(string $file_id)
    {
        return $this->get('/files/' . $file_id . '/content');
    }
}
