<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Passport\RefreshTokenRepository;
use Laravel\Passport\TokenRepository;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        $user = $request->user();
        $tokens = $user->tokens;

        foreach ($tokens as $token) {
            $token->revoke();
            app(RefreshTokenRepository::class)->revokeRefreshTokensByAccessTokenId($token->id);
        }

        return response()->json(['message' => 'Logged out successfully']);
    }
}
