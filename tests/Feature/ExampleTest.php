namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_returns_a_successful_response()
    {
        // Mock la réponse pour simuler une réponse avec le code 200
        $this->mock(\Illuminate\Contracts\Routing\ResponseFactory::class, function ($mock) {
            $mock->shouldReceive('json')->once()->andReturn(['data' => 'mocked']);
        });

        // Appel de la route '/'
        $response = $this->get('/');

        // Assertion pour vérifier si le code de statut est 200
        $response->assertStatus(200);
    }
}
