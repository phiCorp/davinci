<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('APP.TITLE','Document') }}</title>
</head>
<style>
    html {
        background-color: #000;
        color: #fff;
    }

    h1 {
        text-align: center;
        margin: 30px;
        font-family: monospace;
        font-size: 48px;
    }

    p {
        position: fixed;
        bottom: 0;
        font-size: 16px;
        text-align: center;
        font-family: monospace;
        left: 50%;
        transform: translateX(-50%);
    }

    img {
        width: 200px;
        margin: 0 auto;
        display: flex;
    }
</style>

<body>


    <h1>Welcome</h1>

    <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA4UAAAOFCAIAAABSstD3AAAACXBIWXMAAAsTAAALEwEAmpwYAAAF82lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNi4wLWMwMDMgMTE2LmRkYzdiYzQsIDIwMjEvMDgvMTctMTM6MTg6MzcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChXaW5kb3dzKSIgeG1wOkNyZWF0ZURhdGU9IjIwMjQtMTEtMjNUMDk6NDI6NTMrMDM6MzAiIHhtcDpNb2RpZnlEYXRlPSIyMDI0LTExLTIzVDEwOjE2OjE2KzAzOjMwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDI0LTExLTIzVDEwOjE2OjE2KzAzOjMwIiBkYzpmb3JtYXQ9ImltYWdlL3BuZyIgcGhvdG9zaG9wOkNvbG9yTW9kZT0iMyIgcGhvdG9zaG9wOklDQ1Byb2ZpbGU9InNSR0IgSUVDNjE5NjYtMi4xIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOmEyYWQwZmY4LTAyMGItYmQ0YS05YjFkLWEwYzI2OTU2ZjRhMCIgeG1wTU06RG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjYzN2RmYzczLTA0MjAtODQ0My1iNjZkLWY5Yzc5OWIyMzVjNiIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOjBkMTYwZmUyLTk2ZTktMzM0ZC1hMjdjLTQxOGFhNzBmZWIwOCI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNyZWF0ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6MGQxNjBmZTItOTZlOS0zMzRkLWEyN2MtNDE4YWE3MGZlYjA4IiBzdEV2dDp3aGVuPSIyMDI0LTExLTIzVDA5OjQyOjUzKzAzOjMwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMiAoV2luZG93cykiLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOmEyYWQwZmY4LTAyMGItYmQ0YS05YjFkLWEwYzI2OTU2ZjRhMCIgc3RFdnQ6d2hlbj0iMjAyNC0xMS0yM1QxMDoxNjoxNiswMzozMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIDIxLjIgKFdpbmRvd3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDwvcmRmOlNlcT4gPC94bXBNTTpIaXN0b3J5PiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqywM1AAAEJ3SURBVHic7d15lF51fT/wZzJJzEoSsgAhCwEJAUQFRFHxh1VRLIocXChYsdpTtRbXtqfW2nqOlB6r7UGqPT0tIBYOLYIHxQrWBRdAQQUqi5gACesgEJJAIOss9/fHhXHMMnmemefe73Jfrz96MJ155j7f+/1+vu/53OfeabUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAUHpCHwAQnaIoxvy9PT2qClEbz/SugiUDLXkUGqv+Xdm+Sw1ii5vjZNXQECY6NEWc+7TtlrGJcz7XxsIhMyY05Cy5Pdsuy86Sm8ZBWDskzfSF3GSzedtfmymbCRyW5UNazFfIRN67uM01V3nP23hYQUTOBIW0NW07t62mrmkzNk7WEbExIyFV9nV7ahJM1MhZR8TALIT02OB3YEONjSmaKEuJUMw8SIY9fo/spqGYnJmxlKiZCQcJsNl3xFZaD9OyISwoamCSQdRs+eNhH+06E7LJLCiqY25BvOz9XWETHT9TkZGsKbrOlIIY2f6rYBPtiEnIHllTdIuZBHERAqpmBx2F6cfYWFaMkwkEEZEGamP7HMnEoyssK8bM1IEoCAT1s3eadVTE4qJTZgyEJxaE0sBd02SjNg1cX4yZuQKByQdhNWTLNM0IqCGrjPEwRSAYESESGW+W5hjxyHihMX4mB4QhKMQmp83S7CJaOS00usi0gADEhTilvlOaVyQk9eVGd5kNUDehIXLJbZNmFOlKbrlREfMA6iM3JCT+bdJ0IhvxLzeqZgZATaSHFMW5TZpLZCnO5UY9nHuoiQyRtBh2SlOIJohhrVE/Zx3qIElko/7N0uShgaTSpnG+oXLyRK6q3jLNHBpOKm0OZxoqJ1U0R1e2TxMGRpJKm8A5hsqJF4y0w+ZqekRrPDHIae0ukTR7TjBUK8VtaZylP8W3TEPEGWssmTbFefroCqcWqhX/TlNPiY9/HMhDTpHFqtmlnE4xw5xUqFaEO0oM1TzCYSE5Mczk+lk7raae+rw5o1CteDaPmCt4PKNEnGKevcE1dvmYFTlxLqFawbeK5Ep28BEjBsnN20g0cPmYKnlwFqFaAbeH1Mt0A3fWJkt9usapIYvI5MmAUwjVCrsf5FGmG7KnNk0ekzMh2a8jMyppTh5UK4Y9IJsyHcNgMmbZzMMM5LqUzLF0OXNQrUjqfmZlOpJRZY8ym3j5yXIpmXUpcs6gWvGU+/xqdDxjy0j5zbSGyGlBmYTJccKgcvFU+SxrdDzD22RZTq3GymNNmZNpcbagclEV91xrdFSD3BC5ziWGZbCszNJUOE9Qh6jKeq4FOqpBzlWuk4fRJb24TNokOElQhwireZY1OsJxzkOWs4VOJb2+zOHIOT1QkwhLeZYFOsJxTleWM4TxS3SVmc8xc26gPhEW8VwLdIRDnYpcpwRdl+IqM72j5cRArSKs4LkW6AiHOma5TgNqkNZaM9Xj5KxAALGV74wLdGxDHZuMT33D9fT09Pb2Dg0NDQ0N1fMTE1prpn2EnBIII7banXeBjm20g8v7dDfZzJkz999//8mTJ0+fPn3z5s19fX3r16+vLZK2klprVkFUJoY+AGioshTGU7uLosi4Osc22qFkfIob7nnPe97ee+89Z86cY4455thjj928efOaNWtuvfXWoaGhmqd9Qmst76KXHGcCAouqcDehOkc14PVowmltpvKi/MSJE1/3ute9613vWr58+fr162+77bZvfvObP/rRj0IfXRprzeqIhP4oBNbT0xNP1W5CwyCh/s04ZX8qmTt37oc//OH3v//98+bNu+OOO84999yrr75627Zt27ZtC31orVYia60JRS8JzgHEIp6q3ZzqHM+Yd1FzTl+TLV++/CMf+ciJJ5544IEH3nrrrV/60pduueWW++677+mnnw59aLsW+VqzaoJzAiAi8ZTsplXneEZ+PJp21prpBS94wZlnnnnCCSe8+MUvvuWWWy6++OKbbrrp5z//eejjakvMC83yCcvoQ1ziqdfNrM7xjH/7mnmmGmj58uVvectb3vzmN7/qVa9atWrVlVdeedVVV/3sZz8LfVwdi3aVWUoBGXqIUST1uuHVOZKzsDsNPzuNst9++x133HHvfOc73/KWtzz66KPf+973zj///Ouvvz70cY1LnOvLsgL4HUUcQg9DLEKfh98RejCoz8yZM1/4wheed955RVE888wzN9xwwxvf+MbQB9VNoRfTLoQeEoDIhC7Lzwo9DDFyIqjahAkTpkyZ8pGPfKSvr68oitWrV5966qmhD6oSQVbTKEKPB0CUQhfnolCg22Pw6aIjjzzyxhtv3LZt28aNG88555y5c+dOnjw59EFVqKLlMzahBwMgSqGLc1Eo0FCjT37ykytXriyK4ic/+cnv//7vz5s3L/QR1SR0nXtW6GEAiFXo+lwUajRU74gjjrjsssu2bNlSFMXnPve5o446KvQR1S10nXtW6GEAiFXo+lwUajRU6U1vetN3v/vdoihuv/32D33oQ9OmTQt9RMGELnVqHcDuhS7RRaFMQwXmzZv37ne/+4EHHiiK4pprrnnd614X+ojCU+gAoha2TKvU0F377bffpz71qc2bN/f3919xxRUHHHBA6COKiEIHEK+ANVqlhm7p6emZPXv25Zdfvn379v7+/gsvvHCvvfYKfVDRUeUA4hWqRqvU0C0LFiz4wQ9+sHnz5qIozj333L333tvfB9odhQ4gUkEKtEoNXbFs2bJrr712YGCgKIp//ud/XrRoUegjip0qBxCp+gu0Yg3jd+ihh1555ZXlOvrKV76ybNmy0EeUBlUOIFL1F2jFGsbjwAMPvPDCC8sV9O1vf/uggw4KfUSJUeUAYlRzdVasYcymT5/+2c9+tnzi/Y033njkkUeGPqIkKXEAMaqzOivWMGZnnHHG/fffXxTFqlWr3vGOd4Q+nISpcgAxqrM6K9YwBrNmzbrrrruKoti+ffvf//3fhz6c5KlyAJGqs0Ar1tC+CRMmfPnLX960aVNRFJdeeun06dNDH1EOVDmASNVZoFVqaMfEiRNf/vKXP/roo0VRrFq16pRTTgl9RPlQ6AAiVWeBVqlhj2bPnn3dddeVK+VTn/pUPX+Haa+99lqwYMGCBQuy/7NPCl3qJoY+AKASPT099dfNoij8dRnY2dSpU0888cRXvepVrVbrjjvu+Na3vrVx48bu/oiJEyfuv//+ixcvXrJkyV577TV79ux99tln1qxZz3ve81qt1vbt259++unf/OY3Tz755MaNGx966KEHH3zwscce27JlS3cPowkUuirIo5CtIJEU2Nny5cs/+tGPlv/9pS996d577+3WK0+bNm3ZsmVLlix50YtetHz58kMOOeSQQw6ZO3fuKN+yYcOGVatWrVy58oEHHvj1r399zz333HfffRs2bOjWIQVRc7kTSQE6U+dlLBezYGfPe97zzjrrrKIoBgcHV69efcABB3TlZWfPnn3EEUf82Z/92TXXXFM+zXRnQyPsbsH+9Kc//eQnP/nSl750/vz5SWesqira7oV+xwBJUaYhoJe85CXf+973iqLYunXrWWedNf6Pck6aNGnZsmWf+MQn7r333pHrbmhoaKBtOyTUtWvXfuELX3jxi188ZcqUdFNprWWuKAq1DqAjajSE8r73va+/v78oinXr1i1cuHD8ae/000//v//7v82bNw8ODhZFMTg42H4M3Vn5IkNDQ1u3bn3ggQc+85nPzJkzpytvvH41FzrlDqAzajQEMXfu3P/4j/8oiuKZZ575yle+Mm3atPG82vLlyy+++OKHH3647G6ObIgODg4ODg6Wl+b3mFCHM+jwV5b/UhTF+vXrf/azn73tbW/r1gjUrP5ap+IBdEB1hvqdeuqp99xzT1EUjz766PHHHz9x4thvI37jG9/4gx/8YGBgoFxiu7zsvrNd5tFt27bt8suGU+nKlSvPOeecFJ/Y3+1K1oHQbz1t7q+HpnD/KdTvNa95zUEHHdRqte67774bb7xxYGBgDC8yefLkM84446yzzjr66KNbrdbAwMCECRN6e3vL/+/Q0FBfX9/atWuffvrp/v7+CRMmTJs2bebMmfvss8+8efPKLytja/n1EyZMKIrijjvuuPnmm5ctW3b44YfPnz+//LIykk6cOPGQQw752Mc+tvfee5977rl33313V4aiHgGfK6LojYc8Cg3iCVBQpwULFhx++OE9PT1PPfXUddddt3379jG8yOzZs0877bRPfepTixYtKopiaGiobLIWRbFy5cr77rvv9ttvv+eeex555JENGzZs3769t7d3xowZc+bMWbx48dFHH71ixYrDDz+87HQOp9KJEydu2LDhkksueeKJJ1796lcff/zxhx9++IoVKyZOnFhe8e/p6Zk6deoHPvCBOXPmnH322b/61a+6OzK5KodXKgXYMxewoB5nnnnm6tWri6K48847X/va147hFaZPn/6BD3zgiSeeKJNoeV9Uf3///ffff9lll5188sl7/EDqUUcddd55561evbr83vIDo+XdS1/+8pdnzZrVarV6e3tPOeWUq6666pFHHilXbn9///AHA6655polS5aM5f2HU2eV26XQAwCQAkUZavCv//qvmzdvLorihz/84ezZszv99gkTJpx22ml33313URSDg4NloNy6det11133hje8oaOXOvbYY6+99tryYMqPihZFsWXLlosuumg40U6cOPHMM8+8/fbby0+XDgwMlD+xKIqrr756nHdi1a+2Krc7oQcAIAWKMlRt+A/WX3rppWO4hnvAAQdce+215Y3zw9Hwi1/84rJlyzq9L6q3t3fevHnnnntuGUnLLmlRFE888cRJJ51U/k3RVqs1adKkgw8++NJLLy1/1nAkffrppy+44IJOjz+42qrcKEKPAUDclGOoTk9Pz2GHHXbXXXcVRbF+/fpPfvKTY3iR//7v/y7/8NLwpfOzzz576dKlYz6q+fPn/8M//MNTTz1VFEUZc4uiuPPOO+fNmzfyy5YtW3bOOeeUHzYdbqY+9thj733ve4eTaxJqq3KjCz0MAHFTjqEivb29p59++kMPPVQUxcqVK9/xjnd0+gqnnHLK2rVri6IoP+65bdu2r371qwsXLhznge23335f/vKXy9ccjrl//Md/PGPGjJFftmDBgrPPPvuZZ54pD6BMrmvWrFmxYsU4D6BmtVW5PQo9EgARU4ihCpMmTTr77LPXrVtXFMVPfvKT4447rqNvnzNnzs9//vP+/v7ykfVFUfzyl788/PDDu3JsL3jBC6655priucfpF0Vx5513HnXUUTt82dy5c88777wNGzYUz2Xioiguu+yyfffdtyuHUZt6qlybQg8GQKyUYOi6SZMmff3rXy9vDPrGN76xaNGi9r93ypQpp512Wrl2yjD6m9/85n3ve18XD++UU04pe7fDLdKPfvSjU6dO3eHLli5deuWVVxbPJdcykr773e9O66p9SyQFiJ8SDF03derU22+/vZz8559/fkc3My1ZsuT6668vbyQqI+AVV1zR3cObPXv2P/7jP5aHV0be//3f/33Ri16081e+5S1vGU6uZXj93ve+t8uvjFw9ha59occjOhNCHwAQmEc3Q9fNmDFj5syZ5X+Xt7S3+Y09PT0LFiw47rjjykfT9/T0bNq06dZbb+3u4T355JM33HBDf39/q9UaGhpqtVrHHnvsYYcdtvNXXnXVVV/84hcHBwfLv+rUarVe97rXHX/88RMmyA/jIpXuwHwCRFLopp6ennnz5g3n0U2bNrX/vdOmTXvpS1868l/uuOOOm266qZvH12q1Wq2HHnrouuuuaz23/Pfaa68DDzxwl1/5i1/8YuXKlT09PcN/4O2YY47Zf//9u35IlYqzykmlw+RRAOimiRMn7rvvvsOPCN2yZUv73zt//vxjjjmm1WqVzdFWq9XX13fPPfd0/SAff/zxO++8s9VqlZ3Onp6eAw88cIcHP5VuuummCy+8sNVq9fb2ls3UE0444fd+7/e6fkhVizOStp77K6MNJ48CrVb1lVrBpTnKPDq8psrL4m2aOXNm+YTRoijKV3jwwQcfffTRrh/k2rVryzw63PWcM2fOnDlzdv7KLVu23HDDDWvXri3/Z1EU++yzz8tf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r33ta4cddlibP72np+eVr3xl+ceZyp87MDDwT//0T52+i5zUVTjrEHosgayFLnE7Cj0eEMb73//+8pJ92Vm88cYbDzzwwE5fpKenZ/bs2X/6p3/61FNPlQtqcHBwOJWWbcuBEQYHB8voOfzvI/Pr5z//+UWLFrV/5/j06dM//vGPFyM+eHrfffedccYZnb6L/NRfSCsSeiCBTIUubjsKPR4QzOzZsy+55JLiudS4ffv2M844o3zqZ6dmzpz5spe97Lzzztu6devI9TX0nJH/Mjg4OJxKh33ta197/etfv/fee3f0c//f//t/q1evLopi+KMCF1544axZs8bwFvJTefWsS+iBBPISuqbtWuhRgZA++MEP9vf3F8/luV/96lcvfOELx/xq+++//0knnXTuueeuWrWqzQX4+OOPX3zxxX/wB3+wfPnyTn/chAkT/uqv/qp8neH769///veP+fizVE3hrFvYMRzLr2hAhIJXk93J4IHSMB7XXHPNq1/96re//e2tVqsoisMOO+yd73xnX1/funXrxvBqfX19fX19N99883e+850VK1YceeSRCxcuXLRo0T777DNjxozy7zlt3br1ySef7Ovre+SRR+68887bbrvtl7/85erVq8fw417zmteceeaZrVZrcHCwXMvf/OY3r7322jG8VMbKkYm2CLepKIqA5do+ATmIuQ7Ko3DyySdfeumlM2bMGBoamjBhwsMPP/x3f/d3F1100fhfecGCBYsXLz7ggAMWLlw4c+bMMo9u2bJlw4YNDzzwwEMPPXTPPfeM+cVnzZr1hS984Y/+6I+KohgcHJw4ceL27dtPP/30K6+8cvxHnquYq3E7VGxgLAJe3GlH6OGBKCxevPiiiy4qnvtkZ1EUP/nJT44++ujQx7UH733ve4c/OVp+FPXrX//60qVLQx9X7IIW3fEKPXhAgkIXrj0LPUIQi0MOOaS8O374rqAf/OAHs2fPDn1cu3XggQfedtttxYhH6D/zzDPtP7KUgIV3nEKPHJCU0CVrz0KPEERkxowZ73vf+zZt2lSMuDHoiiuuCH1cuzZ58uTrrruu7IkOh9HPfOYzMQfoOIUtwmMWetiAFISuVG0JPUgQl/IZohdffHH5tKbhkPdf//VfY3v8U3WmTJny9a9/vTzO8skARVHccMMNc+fO9eHCsQlYiscs9JgBcQtdo9oVepwgRgceeOBPf/rTYsQHSbdt23bZZZftv//+oQ/tWQsWLPjqV79axtDhJ5iuWbNmPM+oohS2Jncq9GgBsQpdnToQeqggXq9+9avvvvvuoijKR9aXS+aqq656xSteEfrQWkceeeTll19eHtLwX3V66KGHTjvttNCHlo9QZXkMQg8VEJ/QdakDoYcKYveHf/iH5d+XH75VqCiKH//4x29961unT58e5JAmTZr0xje+8ZprrikPpvwro0VR9PX1feQjHwlySHkLVJ47FnqcgJiErkgdCD1UkIY/+ZM/eeCBB4rn/ih82Yl85JFHzjrrrCVLltR8MIsWLXrPe95z//33l8fT399fhtEnnnjib/7mb2L7eGtOwpbrdoQeISAOoWtRZ0KPFqTkXe961xNPPFH+6fn+/v4ykvb3919yySVHHXXUrFmzent7Kz2Anp6eGTNmHHzwwRdccMHwLf/bt28v/3vjxo3nnHPOnDlzKj0GSoFr96hCjw0QWugq1IHQQwXp6e3tfcMb3rBmzZrhxyqVkXRoaOjJJ5/8/Oc/f8QRR0yYMKG6A1i4cOEnPvGJhx9+uPy5g4OD/f395cEURfHXf/3Xc+fOre6ns7OANXx0oQcGCCd0/elA6KGCVE2ePPnggw8evoWovHZf/vfGjRsfeuihSy655LWvfW3Xf+5RRx117rnn/vrXv96wYUP544bTcFEUq1evPvnkk3VGQ6m9hO9ZDe/ag8QgOvUs/m7xPEIYp4MOOujtb3/7n//5n8+bN6/VahVFMTQ0VF6s37Zt25o1a+6+++7rr7/+pptuuvnmm7dt2za2n9LT03PooYe+7GUvO+GEEw477LBly5bttdderVarbIgOfzbgkksu+eIXv3jLLbcMDQ116f0xFrFtBFWXehsJxCW2GjQKSRS6ZebMmSeccMLpp59+yimnlPcPlaVgeJWtXbv23nvvvf/++++44441a9Y8/PDDDz300OOPP75169bdveaECRPmzp27ePHixYsXL1u27Mgjj1y4cOHzn//8Aw44oPyCsvXV09NT/pTbb7/90ksvvfLKK++9996q3y/ti2RTkEehQSKpO3skiUIVDjrooDPPPPMNb3jDUUcdNWnSpNZOqbR0//33P/jggw8++OCjjz66adOmp5+zffv2CRMmTJ06dfbs2TNnzpw2bdq8efOWLl26dOnSAw44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" />

    <p>
        Davinci {{ app()::VERSION }} <br> PHP {{ PHP_VERSION }}
    </p>


</body>

</html>