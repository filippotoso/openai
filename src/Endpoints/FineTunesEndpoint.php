<?php

namespace FilippoToso\OpenAI\Endpoints;

use FilippoToso\Api\Sdk\Support\Response;

class FineTunesEndpoint extends Endpoint
{
    /**
     * List fine-tunes
     * @see https://platform.openai.com/docs/api-reference/fine-tunes/list
     * @return Response
     */
    public function list(): Response
    {
        return $this->get('/fine-tunes');
    }

    /**
     * Retrieve fine-tune
     * @see https://platform.openai.com/docs/api-reference/fine-tunes/retrieve
     * @return Response
     */
    public function retrieve(string $fine_tune_id): Response
    {
        return $this->get('fine-tunes/' . $fine_tune_id);
    }

    /**
     * Cancel fine-tune
     * @see https://platform.openai.com/docs/api-reference/fine-tunes/cancel
     * @return Response
     */
    public function cancel(string $fine_tune_id): Response
    {
        return $this->post('fine-tunes/' . $fine_tune_id . '/cancel');
    }

    /**
     * List fine-tunes events
     * @see https://platform.openai.com/docs/api-reference/fine-tunes/events
     * @return Response
     */
    public function events(string $fine_tune_id, bool $stream = false): Response
    {
        return $this->get('fine-tunes/' . $fine_tune_id . '/events?' . http_build_query([
            'stream' => $stream ? 'true' : 'false',
        ]));
    }

    /**
     * Delete fine-tune model
     * @see https://platform.openai.com/docs/api-reference/fine-tunes/delete-model
     * @return Response
     */
    public function delete(string $model): Response
    {
        return $this->delete('/models/' . $model);
    }

    /**
     * Create fine-tune
     * @see https://platform.openai.com/docs/api-reference/fine-tunes
     * @return Response
     */
    public function create(string $training_file, string $validation_file = null, string $model = 'curie', int $n_epochs = 4, int $batch_size = null, float $learning_rate_multiplier = null, float $prompt_loss_weight = 0.01, bool $compute_classification_metrics = false, int $classification_n_classes = null, array $classification_positive_class = null, array $classification_betas = null, string $suffix = null): Response
    {
        return $this->post('/fine-tunes', [], $this->payload(__METHOD__, func_get_args()));
    }
}
